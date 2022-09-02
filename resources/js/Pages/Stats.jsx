import Navigation from "../Components/Navigation";
import UserStats from "../Components/Stats/UserStats";

export default function Stats() {
    return (
        <Navigation>
            <main>
                <aside>
                    Just having fun with inertia and react mon Stats
                    <div>
                        <UserStats />
                    </div>
                </aside>
            </main>
        </Navigation>
    );
}
