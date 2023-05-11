#!/bin/bash

# Set log file path
logFile="/home/log.log"

# Show script name and variables
echo Ran script $0 with parameters: >> "${logFile}"
echo CallerID: $1, DIDNumber: $2, CallerInput: $3 >> "${logFile}"
echo _____________________________________________ >> "${logFile}"

# Return exit code
exit 3
