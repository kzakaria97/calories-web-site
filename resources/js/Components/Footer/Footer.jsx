import React from "react";
import ReactDOM from "react-dom";

import { FaBeer } from "react-icons/fa";
import { AiFillHeart } from "react-icons/ai";

export default function Footer() {
    const heading = "Je suis le footer ";
    return (
        <div>
            {heading} <FaBeer /> <AiFillHeart />
        </div>
    );
}

if (document.getElementById("footer")) {
    ReactDOM.render(<Footer />, document.getElementById("footer"));
}
