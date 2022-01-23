#!/usr/bin/env bash

set -e

service ssh start

exec /docker-entrypoint.sh "$@"
