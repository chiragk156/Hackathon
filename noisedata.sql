DROP SCHEMA IF EXISTS NoisePollution;
CREATE SCHEMA NoisePollution;
USE sakila;

CREATE TABLE NoiseData(
    Name VARCHAR(50),
    PollutionLevel numeric(3,2)
);
