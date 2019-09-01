import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import {NgSelectModule, NgOption} from '@ng-select/ng-select';
import { AgmCoreModule } from '@agm/core';
import { IconsModule } from './icons/icons.module';
import { PickerModule } from '@ctrl/ngx-emoji-mart';

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
import { VerificationComponent } from './pages/verification/verification.component';
import { PasswordComponent } from './pages/password/password.component';
import { ResetPasswordComponent } from './pages/reset-password/reset-password.component';

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
    PasswordComponent,
    ResetPasswordComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    NgSelectModule,
    AgmCoreModule.forRoot({
      apiKey: 'AIzaSyDra0swDtsAPaAqtBJT04kyl2DfZAQxDnA',
      libraries: ["places"]
    }),
    IconsModule,
    PickerModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
