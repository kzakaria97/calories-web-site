import { useState, useEffect } from "react";
import { Chart } from "react-chartjs-2";
import {
    Chart as ChartJS,
    CategoryScale,
    LineController,
    LineElement,
    PointElement,
    LinearScale,
    Title,
} from "chart.js";

import { Line } from "react-chartjs-2";
ChartJS.register(
    CategoryScale,
    LineController,
    LineElement,
    PointElement,
    LinearScale,
    Title
);

export default function UserStats() {
    const [userData, setUserData] = useState({
        labels: [
            "Lundi",
            "Mardin",
            "Mercredi",
            "Jeudi",
            "Vendredi",
            "Samedi",
            "Dimanche",
        ],
        datasets: [
            {
                label: "User Weight Progression",
                backgroundColor: "rgb(255, 99, 132)",
                borderColor: "rgb(255, 99, 132)",
                data: [10, 50, 560, 605, 204, 20414, 550],
            },
        ],
    });
    return (
        <div>
            <Line data={userData} />
        </div>
    );
}
