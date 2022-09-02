import Navigation from "../Components/Navigation";
import UserStats from "../Components/Stats/UserStats";

export default function Stats() {
    return (
        <main>
            <Navigation />
            <aside>
                Just having fun with inertia and react mon Stats
                <div>
                    <UserStats />
                </div>
            </aside>
            ;
        </main>
    );
}
