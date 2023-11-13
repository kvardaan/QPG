#!C:/Python310/python.exe 
print("Content-Type: text/html")

import sys
import tabula
import pandas as pd
import mysql.connector

#Command-line arguments check

# tables = tabula.read_pdf(pdf_file, pages="all", multiple_tables=True)
# df = tables[0]  
# df.columns = ["qid", "question", "marks", "subject"]

conn = mysql.connector.connect(
    host="localhost:3307",
    user="root",
    password="123",
    database="qpg_project"
)
cursor = conn.cursor()

# insert_query = "INSERT INTO qbank (qid, question, marks, subject) VALUES (%s, %s, %s, %s)"

# for row in df.itertuples(index=False):
#     cursor.execute(insert_query, tuple(row))

# conn.commit()
# conn.close()

print("Data from PDF file inserted into MySQL successfully")


# import os
# import pdfplumber
# import mysql.connector

# # Define your PDF directory and MySQL database connection parameters
# pdf_directory = "/pdf"  # Replace with the path to your PDF directory
# db_config = {
#     "host": "localhost",
#     "user": "root",
#     "password": "123",  # Enter your MySQL password
#     "database": "qpg_project",
# }

# # Function to create database tables
# def create_tables(connection):
#     cursor = connection.cursor()
#     cursor.execute("""
#         CREATE TABLE IF NOT EXISTS subjects (
#             subject_id INT AUTO_INCREMENT PRIMARY KEY,
#             subject_name VARCHAR(255) NOT NULL,
#             pdf_file_name VARCHAR(255) NOT NULL
#         )
#     """)
#     cursor.execute("""
#         CREATE TABLE IF NOT EXISTS queslist (
#             qid INT AUTO_INCREMENT PRIMARY KEY,
#             question VARCHAR(255) NOT NULL,
#             marks INT NOT NULL,
#             pdf_file_name VARCHAR(255) NOT NULL,
#             subject_id INT,
#             FOREIGN KEY (subject_id) REFERENCES subjects(subject_id)
#         )
#     """)
#     connection.commit()

# # Function to extract data from PDF files and insert into the database
# def extract_data_and_store_in_db(pdf_directory, connection):
#     cursor = connection.cursor()
    
#     for filename in os.listdir(pdf_directory):
#         if filename.endswith(".pdf"):
#             pdf_file = os.path.join(pdf_directory, filename)
#             with pdfplumber.open(pdf_file) as pdf:
#                 for page in pdf.pages:
#                     for table in page.extract_tables():
#                         for row in table[1:]:  # Skip the header row if there is one
#                             question = row[0].strip()
#                             marks = int(row[1])
#                             # Assuming you have a way to determine the subject name
#                             subject_name = "Your Subject Name"
#                             pdf_file_name = filename
#                             # Insert the data into the database
#                             cursor.execute("""
#                                 INSERT INTO subjects (subject_name, pdf_file_name) 
#                                 VALUES (%s, %s)
#                             """, (subject_name, pdf_file_name))
#                             subject_id = cursor.lastrowid  # Get the auto-generated subject_id
#                             cursor.execute("""
#                                 INSERT INTO queslist (question, marks, pdf_file_name, subject_id) 
#                                 VALUES (%s, %s, %s, %s)
#                             """, (question, marks, pdf_file_name, subject_id))
#     connection.commit()

# if __name__ == "__main__":
#     try:
#         # Connect to the MySQL database
#         db_connection = mysql.connector.connect(**db_config)
        
#         # Create database tables
#         create_tables(db_connection)

#         # Extract data from PDFs and store in the database
#         extract_data_and_store_in_db(pdf_directory, db_connection)

#     except mysql.connector.Error as err:
#         print(f"MySQL Error: {err}")
#     finally:
#         if db_connection.is_connected():
#             db_connection.close()
