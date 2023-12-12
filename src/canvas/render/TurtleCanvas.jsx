import {render} from "preact";
import {useEffect, useRef} from "preact/hooks";
import {toRadians} from "../engine/trigo.js";
import useNextFrame from "../../tools.js";
import antPng from "./assets/ant.png";
import fishPng from "./assets/fish.png";


export default function TurtleCanvas({entities}) {

    const refCanvas = useRef(null);

    const fishRef = useRef(null);
    const antRef = useRef(null);

    useEffect(() => {

        const canvas = refCanvas.current;

        function setCanvasSize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        window.addEventListener('resize', setCanvasSize);
        setCanvasSize()

        return () => {
            window.removeEventListener('resize', setCanvasSize);
        }

    }, []);

    function render() {
        const canvas = refCanvas.current;
        const ctx = canvas.getContext("2d")
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (let t of entities.ref.ants) {
            rotateAndPaintImage(ctx, antRef.current, toRadians(t.angle), t.x, t.y, 8, 8);
        }
        for (let t of entities.ref.fishes) {
            rotateAndPaintImage(ctx, fishRef.current, toRadians(t.angle), t.x, t.y, 80/5, 50/5);
        }
    }

    useNextFrame(render);

    return (
        <>
            <div id="canvas_assets" class="d-none">
                <img src={fishPng} alt="" ref={fishRef} />
                <img src={antPng} alt="" ref={antRef} />
            </div>
            <canvas ref={refCanvas}></canvas>
        </>
    )
}

function rotateAndPaintImage(context, image, angleInRad, positionX, positionY, width, height) {
    context.translate(positionX, positionY);
    context.rotate( angleInRad);
    context.drawImage( image, -width/2, -height/2, width, height);
    context.rotate(-angleInRad);
    context.translate(-positionX, -positionY);
}


