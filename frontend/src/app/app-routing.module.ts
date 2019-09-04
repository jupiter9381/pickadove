import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

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
import { HomeComponent } from './pages/home/home.component';

import { GuardService } from './service/guard.service';

const routes: Routes = [
  { path: '', component: SignupComponent},
  { path: 'login', component: SignupComponent},
  { path: 'home', component: HomeComponent, canActivate: [GuardService]},
  { path: 'password', component: PasswordComponent},
  { path: 'reset-password', component: ResetPasswordComponent},
  { path: 'profile-preview', component: ProfilePreviewComponent},
  { path: 'payment-history', component: PaymentHistoryComponent},
  { path: 'payment', component: PaymentComponent},
  { path: 'profile-browser', component: ProfileBrowserComponent},
  { path: 'chat', component: ChatComponent},
  { path: 'map-view', component: MapViewComponent},
  { path: 'profile-edit', component: ProfileEditComponent, canActivate: [GuardService]},
  { path: 'verification', component: VerificationComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
