echo off

goto(){
# Linux/macOS
echo "Starting Server..."
docker compose up
echo "Destroying resources..."
docker compose down
echo "Resources destroyed"
}

goto $@
exit

:(){
rem Windows
echo "Starting Server..."
docker compose up
echo "Destroying resources..."
docker compose down
echo "Resources destroyed"

exit