import React from "react";

import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import Profile from "./Profile";
import Stats from "./Stats";
import Compare from "./Compare";
import Download from "./Download";

export default function Home() {
    return (
        <Router>
            <div>
                <nav>
                    <Link to="/dashboard">Home</Link>
                    <Link to="/stats">Stats</Link>
                </nav>
            </div>
            <Switch>
                <Route path="/dashboard">
                    <Home />
                </Route>
                <Route path="/stats">
                    <Stats />
                </Route>
            </Switch>
        </Router>
    );
}
