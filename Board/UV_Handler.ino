
int UVOUT1 = A0; //Output from the sensor
int UVOUT2 = A1; //Output from the sensor

int REF_3V3 = A2; //3.3V power on the Arduino boar


void UV_Init() {
  pinMode(UVOUT1, INPUT);
  pinMode(UVOUT2, INPUT);
  pinMode(REF_3V3, INPUT);
}

void BacaUV_1() {
  int uvLevel = averageAnalogRead(UVOUT1);
  int refLevel = averageAnalogRead(REF_3V3);

  //Use the 3.3V power pin as a reference to get a very accurate output value from sensor
  float outputVoltage = 3.3 / refLevel * uvLevel;
  float uvIntensity = mapfloat(outputVoltage, 0.99, 2.8, 0.0, 15.0); //Convert the voltage to a UV intensity level
  insensitasUV[0] = uvIntensity;
}


void BacaUV_2() {
  int uvLevel = averageAnalogRead(UVOUT2);
  int refLevel = averageAnalogRead(REF_3V3);

  //Use the 3.3V power pin as a reference to get a very accurate output value from sensor
  float outputVoltage = 3.3 / refLevel * uvLevel;
  float uvIntensity = mapfloat(outputVoltage, 0.99, 2.8, 0.0, 15.0); //Convert the voltage to a UV intensity level
  insensitasUV[1] = uvIntensity;
}


//Returns the average
int averageAnalogRead(int pinToRead)
{
  byte numberOfReadings = 8;
  unsigned int runningValue = 0;

  for (int x = 0 ; x < numberOfReadings ; x++)
    runningValue += analogRead(pinToRead);
  runningValue /= numberOfReadings;

  return (runningValue);
}

float mapfloat(float x, float in_min, float in_max, float out_min, float out_max)
{
  return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}
