import {Turtle} from "./engine/turtle.js";

function turtleFactory(e) {
    const x = e.target.getBoundingClientRect().right - 10;
    const y = e.target.getBoundingClientRect().top + 10;
    const turtle = new Turtle(x, y, 0);
    turtle.wiggle(90);
    return turtle;
}


export default function DomEventsPopper({entities}) {

    return class TurtleDomEvents extends HTMLElement {

        mouseOver(e) {
            let pop = () => entities.ref[this.turtle_type].push(turtleFactory(e));
            this.interval = setInterval(pop, 600);
            pop();
        }

        mouseOut() {
            clearInterval(this.interval);
            entities.ref[this.turtle_type] = [];
        }

        connectedCallback () {
            this.turtle_type = this.getAttribute('turtle-type');
            this.addEventListener('mouseover', this.mouseOver);
            this.addEventListener('mouseout', this.mouseOut);
        }

        disconnectedCallback () {
            this.removeEventListener('mouseover', this.mouseOver);
            this.removeEventListener('mouseout', this.mouseOut);
            clearInterval(this.interval);
        }
    }

}
