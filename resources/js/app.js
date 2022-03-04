require('./bootstrap');

import moment from 'moment';
window.moment = moment;

import TempusDominus from '@eonasdan/tempus-dominus';
window.tempusDominus = TempusDominus;

import popper from '@popperjs/core';
window.popper = popper;

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


