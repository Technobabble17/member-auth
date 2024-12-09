import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", function (event) {

    const parents = document.querySelectorAll('.parent');

    if (parents.length > 0) {
        parents.forEach(parent => {
            const follower = parent.querySelector('.follower');

            function moveFollower(e) {
                const parentRect = parent.getBoundingClientRect();
                const followerRect = follower.getBoundingClientRect();
                const followerWidth = followerRect.width;

                let xPosition = e.clientX - parentRect.left - (followerWidth / 2);
                const effectiveParentWidth = parentRect.width - 32; // Reducing 48px overall width
                xPosition = Math.max(0, Math.min(xPosition, effectiveParentWidth - followerWidth));
                xPosition += 32;

                gsap.to(follower, { x: xPosition - 48, duration: 3, ease: "elastic.out" });
            }

            parent.addEventListener('mousemove', moveFollower);
        });
    }
});