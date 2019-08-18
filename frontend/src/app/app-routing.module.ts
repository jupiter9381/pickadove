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

const routes: Routes = [
  { path: 'signup', component: SignupComponent},
  { path: 'profile-preview', component: ProfilePreviewComponent},
  { path: 'payment-history', component: PaymentHistoryComponent},
  { path: 'payment', component: PaymentComponent},
  { path: 'profile-browser', component: ProfileBrowserComponent},
  { path: 'chat', component: ChatComponent},
  { path: 'map-view', component: MapViewComponent},
  { path: 'profile-edit', component: ProfileEditComponent},
  { path: 'verification', component: VerificationComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
