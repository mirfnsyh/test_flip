CREATE DATABASE IF NOT EXISTS `flip_test` ;
USE `flip_test`;

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transactions_id` varchar(100) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT '0',
  `status` varchar(100) DEFAULT NULL,
  `timestamp` datetime DEFAULT CURRENT_TIMESTAMP,
  `bank_code` varchar(100) DEFAULT NULL,
  `account_number` varchar(100) DEFAULT NULL,
  `beneficiary_name` varchar(100) DEFAULT NULL,
  `remark` varchar(250) DEFAULT NULL,
  `receipt` varchar(250) DEFAULT NULL,
  `time_served` datetime DEFAULT CURRENT_TIMESTAMP,
  `fee` decimal(10,0) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (id),
  UNIQUE KEY (`transactions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transactions` ( `transactions_id`, `amount`, `status`, `timestamp`, `bank_code`, `account_number`, `beneficiary_name`, `remark`, `receipt`, `time_served`, `fee`, `created_at`, `update_at`) VALUES
('5025575985', '10000', 'SUCCESS', '2019-10-11 20:55:44', 'bni', '1234567890', 'PT FLIP', 'sample remark', 'https://flip-receipt.oss-ap-southeast-5.aliyuncs.com/debit_receipt/126316_3d07f9fef9612c7275b3c36f7e1e5762.jpg', '2019-10-11 21:04:44', '4000', '2019-10-11 16:05:12', '2019-10-11 21:05:12');

