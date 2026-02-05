CREATE DATABASE student_db;
USE student_db;

CREATE TABLE students (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  student_name VARCHAR(100) NOT NULL,
  student_id VARCHAR(20) NOT NULL UNIQUE,
  major VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO students (student_name, student_id, major) VALUES
('កានី លីហ៊ួរ', 'ST001', 'ព័ត៌មានវិទ្យា'),
('ផាន់នី ចៅឃុនប៊ី', 'ST002', 'រចនាក្រាហ្វិក'),
('ពិសិដ្ឋ ភីសា', 'ST003', 'រចនាក្រាហ្វិក'),
('សម្បត្តិ ចាន់ណេ', 'ST004', 'រចនាក្រាហ្វិក'),
('សែ ជីបសុគន្ធ', 'ST005', 'ព័ត៌មានវិទ្យា'),
('ហ៊ាង ផេងអាន', 'ST006', 'ព័ត៌មានវិទ្យា'),
('ហ៊ី សីហា', 'ST007', 'រចនាក្រាហ្វិក'),
('អ៊ន ស៊ីម', 'ST008', 'ព័ត៌មានវិទ្យា'),
('អូន បញ្ញា', 'ST009', 'រចនាក្រាហ្វិក');

