// import { createBrowserRouter } from "react-router-dom";
import React from "react";
import Login from "./views/Login.jsx";
import Signup from "./views/Signup.jsx";
import Users from "./views/Users.jsx";
import NotFound from "./views/NotFound.jsx";
import Dashboard from "./views/Dashboard.jsx";
import DefaultLayout from "./components/DefaultLayout.jsx";
import GuestLayout from "./components/GuestLayout.jsx";
import { Navigate } from "react-router-dom";

function createRoutesFromArray(routes) {
  return routes.map(route => ({
    ...route,
    exact: route.path === "/" || route.path === "/*" ? true : false,
  }));
}

const router = createRoutesFromArray( [
  {
    path: "/",
    element: <DefaultLayout />,
    children: [
      {
        path: "/",
        element: <Navigate to="Users" />
      },
      {
        path: "/dashboard",
        element: <Dashboard />
      },
      {
        path: "/users",
        element: <Users />
      },
    ]
  },
  {
    path: "/",
    element: <GuestLayout />,
    children: [
      {
        path: "/login",
        element: <Login />
      },
      {
        path: "/signup",
        element: <Signup />
      },
    ]
  },
  {
    path: "/*",
    element: <NotFound />
  },

])

export default router;