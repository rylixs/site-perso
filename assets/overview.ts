import './styles/overview.scss';

import Parallax from 'parallax-js';

const skybox = document.querySelector('#skybox') as HTMLElement | null;

if (skybox) {
    new Parallax(skybox);
}
