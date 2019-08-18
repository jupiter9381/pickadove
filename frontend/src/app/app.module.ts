import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './templates/header/header.component';
import { FooterComponent } from './templates/footer/footer.component';
import { MenuComponent } from './templates/menu/menu.component';
import { SignupComponent } from './pages/signup/signup.component';
import { ProfilePreviewComponent } from './pages/profile-preview/profile-preview.component';
import { PaymentHistoryComponent } from './pages/payment-history/payment-history.component';
import { PaymentComponent } from './pages/payment/payment.component';
import { ProfileBrowserComponent } from './pages/profile-browser/profile-browser.component';
import { ChatComponent } from './pages/chat/chat.component';
import { MapViewComponent } from './pages/map-view/map-view.component';
import { ProfileEditComponent } from './pages/profile-edit/profile-edit.component';

import { HttpClientModule } from '@angular/common/http';
import { VerificationComponent } from './pages/verification/verification.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MenuComponent,
    SignupComponent,
    ProfilePreviewComponent,
    PaymentHistoryComponent,
    PaymentComponent,
    ProfileBrowserComponent,
    ChatComponent,
    MapViewComponent,
    ProfileEditComponent,
    VerificationComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
