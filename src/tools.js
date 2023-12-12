import {createElement, render} from "preact";
import {useEffect, useRef} from "preact/hooks";

export function makeReact(Component, props) {
    return class extends HTMLElement {
        connectedCallback () {
            render(createElement(Component, props), this);
        }
        disconnectedCallback () {
            render(null, this);
        }
    }
}

export default function useNextFrame(fn) {

    const requestRef = useRef();

    function render() {
        fn();
        requestRef.current = requestAnimationFrame(render);
    }

    useEffect(() => {
        requestRef.current = requestAnimationFrame(render);
        return () => { cancelAnimationFrame(requestRef.current) };
    }, []);

}
