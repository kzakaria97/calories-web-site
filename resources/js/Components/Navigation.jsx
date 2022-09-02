import { Link } from "@inertiajs/inertia-react";
import "../../css/css/navbar.css";

export default function Navigation({ children }) {
    return (
        <header>
            <nav className="db__nav-container">
                <Link href="/db">Overview</Link>
                <Link href="/db/stats">Stats</Link>
                <Link href="/db/profile">Profile</Link>
            </nav>
            <article>{children}</article>
        </header>
    );
}
