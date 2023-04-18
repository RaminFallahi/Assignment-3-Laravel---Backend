import { Outlet } from "react-router-dom";

export default function GuestLayout({ children }) {
  return (
    <div>
      <Outlet />
    </div>
  );
}
