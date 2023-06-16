const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

let turn = 0
tl.to(".text", { y: "0%", duration: 1, stagger: 0.25 });
while (turn < 10) {
    tl.to(".slider", { y: "-100%", duration: 3, delay: 0.5 });
    tl.to(".slider", { y: "100%", duration: 3, delay: 0.5 });
    turn += 1
}
// tl.to("intro", { y: "-100%", duration: 1 }, "-=1");