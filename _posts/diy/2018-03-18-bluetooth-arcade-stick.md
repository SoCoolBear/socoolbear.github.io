---
layout: post
title:  "Bluetooth Arcade stick"
date:   2018-03-18
excerpt: "Bluetooth 조이스틱 제작과정을 정리한 포스트입니다."
image: "/images/diy/bluetooth-arcade-stick/finish.JPG"
categories: diy
---

## Overview
이전 블로그의 후속편으로써 편의성을 고려한 신규 모델입니다.

## 준비물
- Bluetooth Module (Adafruit Feather 32u4 Bluefruit LE)
- Polyma 리튬 전지
- LED (Push Up) 버튼 스위치
- 스틱, 버튼, 하우징 ..
- 브레드 보드, 악어 케이블, 점퍼 케이블

## 제작 과정

### 조립
![Hausing Assemble](/images/diy/bluetooth-arcade-stick/hausing-assemble.JPG)

### 배선 
![Hausing Assemble](/images/diy/bluetooth-arcade-stick/module-wiring.jpg)

### 모듈 탑재
- 소스코드 [링크](https://github.com/socoolbear/feather-hidkeyboard) 탑재
- keyboard 로 인식 시킨게 포인트!
- joystick 으로도 구현 되어있으나, retropie 에서 joystick 인식 시키려면 여러보로 복잡하고 버튼 8개까지 밖에 안되어 pass!

![Connected Module](/images/diy/bluetooth-arcade-stick/connected.JPG)

## 결과물
![Finish](/images/diy/bluetooth-arcade-stick/finish.JPG)

## Review
막상 사용해보니 불편한 점이나 난관이 많아 이래저래 노력을 많이 했는데,
과정 중에 찍어 놓은 사진이 너무 없어 노력에 비해 본문이 부실해 진게 참 아쉽네요.
막상 다시 하려고 하니 시간만들기가 쉽지 않네요.

좀 더 자세한 구현 내용 서술이 필요하시면 이메일 주세요.
이것도 인연이다.. 생각하고 힘닿는데 까진 알려 드릴께요.

## Referrer Link
- [Adafruith Feather 32u4 구매 & 참고](https://learn.adafruit.com/adafruit-feather-32u4-bluefruit-le/overview)
- [하우징 및 기타](http://istmall.co.kr/)
- [산와스틱](https://www.amazon.com/Sanwa-JLF-TP-8YT-SK-Adjustable-Tournament-Compatible/dp/B0027Z7L5I)
