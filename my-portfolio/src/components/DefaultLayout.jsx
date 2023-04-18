import { Outlet } from "react-router-dom";

export default function DefaultLayout({ children }) {
  return (
    <div>
      Default
      <Outlet />
    </div>
  );
}
