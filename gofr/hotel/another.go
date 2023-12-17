package main

import (
	"time"

	"gofr.dev/pkg/gofr"
)

type customer struct {
	Name         string    `json:"name"`
	Number       int       `json:"number"`
	CheckInDate  time.Time `json:"check_in_date"`
	CheckOutDate time.Time `json:"check_out_date"`
	NoOfRooms    int       `json:"no_of_rooms"`
}

func main() {
	app := gofr.New()

	app.GET("/", func(ctx *gofr.Context) (interface{}, error) {
		return "Hello, welcome to the root path!", nil
	})

	app.POST("/details/{name}", func(ctx *gofr.Context) (interface{}, error) {
		name := ctx.PathParam("name")

		// Define variables
		var (
			//name         string
			number       int
			checkInDate  time.Time
			checkOutDate time.Time
			noOfRooms    int
		)

		// Set values for the variables (replace with your actual values)
		name = "abc"
		number = 42
		checkInDate = time.Now()
		checkOutDate = time.Now().AddDate(0, 0, 1)
		noOfRooms = 2

		// Inserting a customer row in the database using SQL
		_, err := ctx.DB().ExecContext(ctx, "INSERT INTO details (name, number, check_in_date, check_out_date, no_of_rooms) VALUES (?, ?, ?, ?, ?)", name, number, checkInDate, checkOutDate, noOfRooms)

		return nil, err
	})

	app.GET("/details", func(ctx *gofr.Context) (interface{}, error) {
		var customers []customer

		// Getting the customer from the database using SQL
		rows, err := ctx.DB().QueryContext(ctx, "SELECT * FROM details")
		if err != nil {
			return nil, err
		}

		for rows.Next() {
			var c customer
			if err := rows.Scan(&c.Name, &c.Number, &c.CheckInDate, &c.CheckOutDate, &c.NoOfRooms); err != nil {
				return nil, err
			}

			customers = append(customers, c)
		}

		// Return the customer
		return customers, nil
	})

	app.Start()
}
