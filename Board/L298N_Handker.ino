void L298N_Init() {
  for (int i = 0; i < 6; i++) {
    pinMode(PinL298N[0], OUTPUT);
  }
}
