

void Suhu_Init() {
  Serial.println("Dallas Temperature");
  sensors.begin();
  numberOfDevices = sensors.getDeviceCount();

  Serial.print("Locating devices...");  Serial.print("Found ");
  Serial.print(numberOfDevices, DEC);
  Serial.println(" devices.");

  // report parasite power requirements
  Serial.print("Parasite power is: ");
  if (sensors.isParasitePowerMode()) Serial.println("ON");
  else Serial.println("OFF");

  // Loop through each device, print out address
  for (int i = 0; i < numberOfDevices; i++)
  {
    // Search the wire for address
    if (sensors.getAddress(tempDeviceAddress, i))
    {
      Serial.print("Found device ");
      Serial.print(i, DEC);
      Serial.print(" with address: ");
      printAddress(tempDeviceAddress);
      Serial.println();

      Serial.print("Setting resolution to ");
      Serial.println(TEMPERATURE_PRECISION, DEC);

      // set the resolution to TEMPERATURE_PRECISION bit (Each Dallas/Maxim device is capable of several different resolutions)
      sensors.setResolution(tempDeviceAddress, TEMPERATURE_PRECISION);

      Serial.print("Resolution actually set to: ");
      Serial.print(sensors.getResolution(tempDeviceAddress), DEC);
      Serial.println();
    } else {
      Serial.print("Found ghost device at ");
      Serial.print(i, DEC);
      Serial.print(" but could not detect address. Check power and cabling");
    }
  }
}

void Suhu_GetTemp() {
  sensors.requestTemperatures();
  for (int i = 0; i < numberOfDevices; i++)
  {
    if (sensors.getAddress(tempDeviceAddress, i))
    {
      // Output the device ID
      //      Serial.print("Temperature for device: ");
      //      Serial.println(i, DEC);
      getSuhu[i] = printTemperature(tempDeviceAddress); // Use a simple function to print out the data
    }

  }
}
// function to print the temperature for a device
float printTemperature(DeviceAddress deviceAddress)
{

  // method 2 - faster
  float tempC = sensors.getTempC(deviceAddress);
  if (tempC == DEVICE_DISCONNECTED_C)
  {
    Serial.println("Error: Could not read temperature data");
    return;
  }
  //  Serial.print("Temp C: ");
  //  Serial.print(tempC);
  //  Serial.print(" Temp F: ");
  //  Serial.println(DallasTemperature::toFahrenheit(tempC)); // Converts tempC to Fahrenheit
  return tempC;

}

void printAddress(DeviceAddress deviceAddress)
{
  for (uint8_t i = 0; i < 8; i++)
  {
    if (deviceAddress[i] < 16) Serial.print("0");
    Serial.print(deviceAddress[i], HEX);
  }
}
