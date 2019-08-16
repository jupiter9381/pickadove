import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { DashboardComponent } from './admin/pages/dashboard/dashboard.component';
import { FieldComponent } from './admin/pages/field/field.component';

const routes: Routes = [
  { path: 'dashboard', component: DashboardComponent},
  { path: 'fields',    component: FieldComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
