import 'package:flutter/material.dart';
import 'package:barterit/splashscreen.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'BarterIT',
      theme: ThemeData(
        primarySwatch: Colors.blueGrey,

        ),
        home: const SplashScreen(),
      );
  }
}