import React from "react";
import { FaRegBell, FaTimesCircle } from "react-icons/fa";
import User from "./90x90.jpg";

const Nav = () => {
  return (
    <>
      <nav>
        <h1 className="logo"> Inventory| </h1>

        <ul>
          <li className="nav_link flex ">
            <span>
              {" "}
              <FaTimesCircle />
            </span>
            <span>Add Product</span>
          </li>
          <li className="nav_link">
            <FaRegBell />
          </li>
          <li className="nav_link">
            <img src={User} alt="User" />
          </li>
        </ul>
      </nav>
    </>
  );
};

export default Nav;
