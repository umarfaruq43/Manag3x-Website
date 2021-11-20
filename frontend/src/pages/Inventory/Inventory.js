import React from "react";
import Nav from "./Nav";
import "./inventory.css";
import Reminder from "./Reminder";
import ProductTable from "./ProductTable";

const Inventory = () => {
  return (
    <div className="container">
      <Nav />
      <div className="">
        <div className="col">
          <Reminder />

          <div className="table">
            <ProductTable />
          </div>
        </div>
        <div>
          <div className="col">
            {/* <table>
              <thead>
                <tr>
                  <th className="bend-left">Product Name</th>
                  <th>Price </th>
                  <th>Quantity</th>
                  <th>Category</th>
                  <th className="bend-right">Date</th>
                </tr>
              </thead>
              <tbody>
                {ProductData.map((data, index) => {
                  return (
                    <tr key={index}>
                      <td className="equal">
                        <img src={User} alt="userImage" className="user" />
                        <span className="name">Yeezy350</span>
                      </td>
                      <td>$300</td>
                      <td>50</td>
                      <td>Shoe</td>
                      <td>08/09/21</td>
                    </tr>
                  );
                })}
              </tbody>
            </table> */}
          </div>
        </div>
      </div>
    </div>
  );
};

export default Inventory;
