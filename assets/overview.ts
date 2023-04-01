import './styles/overview.scss';

import Parallax from 'parallax-js';
import AOS from 'aos';
import 'aos/dist/aos.css';

const getAge = (): string => {
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

const skybox = document.querySelector('#skybox') as HTMLElement | null;
const age = document.querySelector('#age') as HTMLElement | null;

if (skybox) new Parallax(skybox);
if (age) age.innerText = getAge();

AOS.init();
