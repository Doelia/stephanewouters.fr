import TurtleCanvas from "./canvas/render/TurtleCanvas.jsx";
import {makeReact} from "./tools.js";
import DomEventsPopper from "./canvas/DomEventsPopper.js";
import "@hotwired/turbo"
import './index.scss'
import initEngine from "./canvas/engine/Engine.js";

Turbo.setProgressBarDelay(150)

// # Animations

const observer = new IntersectionObserver(function (e) {
    let i = 0;
    e.forEach((entry) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('fade-in-finished');
            }, 50 * i++);
        }
    });
}, {
    threshold: .3
});

function animate() {
    document.querySelectorAll('.fade-in:not(.fade-in-scroll)').forEach((el, i) => {
        setTimeout(() => {
            el.classList.add('fade-in-finished');
        }, 50 * i);
    });

    document.querySelectorAll('.fade-in-scroll').forEach((el, i) => {
        observer.observe(el);
    });
}

document.addEventListener("turbo:render", animate);
animate();

// # Canvas

const entities = {
    ref: {
        ants: [],
        fishes: [],
    }
};

initEngine({entities});

customElements.define('turtle-canvas', makeReact(TurtleCanvas, {entities}));
customElements.define('turtle-trigger-popper', DomEventsPopper({entities}));
