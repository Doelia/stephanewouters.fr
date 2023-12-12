import { gsap } from "gsap";

import TurtleCanvas from "./canvas/render/TurtleCanvas.jsx";
import {makeReact} from "./tools.js";
import DomEventsPopper from "./canvas/DomEventsPopper.js";
import "@hotwired/turbo"

import './index.scss'


function runGsap() {
    gsap.fromTo(".fade-in", { y: 50, opacity: 0 }, { y: 0, opacity: 1, stagger: 0.1 });
}

document.addEventListener("turbo:render", runGsap);
runGsap();

const entities = {
    ref: {
        ants: [],
        fishes: [],
    }
};

function initEngine({entities}) {
    function tick() {
        for (let t of entities.ref.ants) {
            t.wiggle(20);
            t.forward(3);
        }
        for (let t of entities.ref.fishes) {
            t.wiggle(10);
            t.forward(2);
        }
    }

    setInterval(tick, 1000/60);

}

initEngine({entities});

customElements.define('turtle-canvas', makeReact(TurtleCanvas, {entities}));
customElements.define('turtle-trigger-popper', DomEventsPopper({entities}));
