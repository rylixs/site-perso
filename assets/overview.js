import './styles/overview.scss';

import './common.js';

import Parallax from 'parallax-js';
import WOW from 'wow.js';
import 'animate.css';

const getAge = () => {
    const birthday = new Date('1994-01-24');
    const now = new Date();

    let age = now.getFullYear() - birthday.getFullYear();

    if (
        now.getMonth() < birthday.getMonth()
        || (
            now.getMonth() === birthday.getMonth()
            && now.getDate() < birthday.getDate()
        )
    ) {
        age--;
    }

    return age.toString();
}

const skybox = document.querySelector('#skybox');
const age = document.querySelector('#age');
const contactContainer = document.querySelector('#contact');

if (skybox) new Parallax(skybox);
if (age) age.innerText = getAge();

if (contactContainer) {
    // Affiche un message par défaut dans le cas où les intégrations réseaux sociaux sont bloquées.
    const checkIframeInjectionInterval = setInterval(() => {
        const iframeExists = !!contactContainer.querySelector('iframe');

        contactContainer.querySelector('a')?.classList.toggle('visually-hidden', iframeExists);

        if (iframeExists) {
            clearInterval(checkIframeInjectionInterval);
        }
    }, 500);

    setTimeout(() => clearInterval(checkIframeInjectionInterval), 3000);
}

new WOW().init();
