require('./bootstrap');

import moment from 'moment';
window.moment = moment;

import tempusDominus from '@eonasdan/tempus-dominus';
window.tempusDominus = tempusDominus;

import popper from '@popperjs/core';
window.popper = popper;

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


