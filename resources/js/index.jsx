import {createRoot} from "react-dom/client";
import App from "./App.jsx";

const root = document.createElement('div');
document.body.appendChild(root)

createRoot(root).render(<App/>)
