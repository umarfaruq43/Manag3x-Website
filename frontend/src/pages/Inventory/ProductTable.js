import React from "react";
import User from "./90x90.jpg";
import { ProductData } from "./TableData";

const ProductTable = () => {
  return (
    <table>
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
        {ProductData.length &&
          ProductData.map((data, index) => {
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
    </table>
  );
};

export default ProductTable;
