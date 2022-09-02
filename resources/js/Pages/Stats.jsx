import Navigation from "../Components/Navigation";
import UserStats from "../Components/Stats/UserStats";
import "../../css/css/dashboard.css";

export default function Stats() {
    return (
        <main className="main__container">
            <Navigation />
            <aside>
                Just having fun with inertia and react mon Stats
                <div>
                    <UserStats />
                </div>
            </aside>
        </main>
    );
}
