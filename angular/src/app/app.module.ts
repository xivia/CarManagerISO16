import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { NavComponent } from './nav/nav.component';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { CreateCarComponent } from './create-car/create-car.component';

import { RouterModule, Routes } from '@angular/router';
import { SettingsComponent } from './settings/settings.component';

const routes: Routes = [
  { path: '', component: AppComponent },
  { path: 'createCar', component: CreateCarComponent },
  { path: 'settings', component: SettingsComponent },
  { path: '**', component: AppComponent },
];

@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    CreateCarComponent,
    SettingsComponent
  ],
  imports: [
    BrowserModule,
    BrowserModule,
    BrowserAnimationsModule,
    FormsModule, 
    ReactiveFormsModule,
    RouterModule.forRoot(routes)
  ],
  exports: [RouterModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
