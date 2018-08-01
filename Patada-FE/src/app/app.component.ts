import { Component, ViewChild } from '@angular/core';
import { Nav, Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

import { HomePage } from '../pages/home/home';
import { NoticePage } from '../pages/PatadaNotice/notice';
@Component({
  templateUrl: 'app.html'
})
export class MyApp {

  @ViewChild(Nav) nav: Nav;

  rootPage:any = HomePage;

  pages: Array <{ title: string, component: any }>

  constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen) {
    //this.initializeApp();
    platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      statusBar.styleDefault();
      splashScreen.hide();
    });

    this.pages = [
      { title: 'Primera', component: HomePage },
      { title: 'Noticias', component: NoticePage }
    ];  
   
  }

  initializeApp() {
    
  }

  openPage(page) {
    this.nav.setRoot(page.component);
  }
}

