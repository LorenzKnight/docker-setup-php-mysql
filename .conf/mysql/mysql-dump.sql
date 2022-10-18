CREATE TABLE IF NOT EXISTS users (
				id serial PRIMARY KEY,
                name varchar default NULL,
                surname varchar default NULL,
                email varchar default NULL,
                password varchar default NULL,
				rate float default NULL,
				signup_date TIMESTAMP WITHOUT TIME ZONE DEFAULT (NOW() AT TIME ZONE 'UTC') NOT NULL
			);