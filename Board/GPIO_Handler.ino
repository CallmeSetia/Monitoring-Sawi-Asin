void GPIO_Init() {
  for (int i = 0; i < 3; i++) {
    pinMode(pinGPIO[i], OUTPUT);
  }
}
