int phval2 = 0;
int phval1 = 0;
unsigned long int avgval2;
unsigned long int avgval1;
int buffer_arr2[10], temp2;
int buffer_arr1[10], temp1;
float ph_act2;
float ph_act1;


void PH_Init() {
  pinMode(pinPH[0], INPUT);
  pinMode(pinPH[1], INPUT);
}

void Sens_BacaPH() {
  for (int i = 0; i < 10; i++)
  {
    buffer_arr2[i] = analogRead(pinPH[1]);
    buffer_arr1[i] = analogRead(pinPH[0]);

    delay(30);
  }
  for (int i = 0; i < 9; i++) {
    for (int j = i + 1; j < 10; j++) {

      if (buffer_arr2[i] > buffer_arr2[j])
      {
        temp2 = buffer_arr2[i];
        buffer_arr2[i] = buffer_arr2[j];
        buffer_arr2[j] = temp2;
      }

      if (buffer_arr1[i] > buffer_arr1[j])
      {
        temp1 = buffer_arr1[i];
        buffer_arr1[i] = buffer_arr1[j];
        buffer_arr1[j] = temp1;
      }
    }
  }

  avgval2 = 0;
  avgval1 = 0;

  for (int i = 2; i < 8; i++) {
    avgval2 += buffer_arr2[i];
    avgval1 += buffer_arr1[i];
  }

  tegPH[0] = (float)avgval2 * 5.0 / 1024 / 6;
  tegPH[1] = (float)avgval1 * 5.0 / 1024 / 6;

  hasilPH[0] = -5.70 * tegPH[0] + kalibrasiPH[0];
  hasilPH[1] = -5.70 * tegPH[1] + kalibrasiPH[1];
}
