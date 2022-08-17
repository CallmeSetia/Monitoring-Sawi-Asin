#include <OneWire.h>
#include <DallasTemperature.h>

#define ONE_WIRE_BUS 2
#define TEMPERATURE_PRECISION 9

OneWire oneWire(ONE_WIRE_BUS);
DallasTemperature sensors(&oneWire);
int numberOfDevices;
DeviceAddress tempDeviceAddress;
#include <Wire.h>
#include "fuzzy_config.h"
// LCD
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27, 20, 4);

int PinL298N[10] = {11, 10, 9, 6, 5, 4};    // L298N PIN ENA, IN1, IN2, IN3, IN4 ENB
int pinGPIO[3] = {3, 7, 8 };                // BUZZ, LED MERAH, LED HIJAU
int pinPH[2] = {A0, A1};
int pinSalinity[2] = {A2, A3};
int pinUVSensor[2] = {A4, A5};

// Variable GLOBAL
float tegPH[2] = {0.0, 0.0};
float kalibrasiPH[2] = {24.04 - 0.4, 24.04 - 1.2};
float hasilPH[2]  = {0.0 , 0.0};
int processTime[3] = {0, 0, 0};
float getSuhu[3] = {0, 0, 0};
float hasilSalinitas[3] = {0, 0, 0};
String fuzzy_out1 = "";
String fuzzy_out2 = "";

float insensitasUV[2] = {0, 0 }
void setup() {
  Serial.begin(9600);
  UV_Init();
  GPIO_Init();
  L298N_Init();
  Suhu_Init();
  LCD_Init();

}

void loop() {
  Sens_BacaPH(); 
  Suhu_GetTemp();
  getNilaiFuzzy();  // Hitung Fuzzy
  Kirim_KeESP32(); // Kirim Data Ke ESP32
}
