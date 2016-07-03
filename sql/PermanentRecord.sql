-- Record entry table setup for PermanentRecord extension
-- Created originally for Alien City
-- porpentine@gmail.com
-- Last Update: July 2, 2016

-- Add record entry table
CREATE TABLE IF NOT EXISTS /*_*/permanent_record (
    -- Unique ID
    record_id int NOT NULL PRIMARY KEY AUTO_INCREMENT
) /*$wgDBTableOptions*/;

CREATE INDEX /*i*/pr_character_dbref ON /*_*/permanent_record (character_dbref);