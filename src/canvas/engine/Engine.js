export default function initEngine({entities}) {
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
