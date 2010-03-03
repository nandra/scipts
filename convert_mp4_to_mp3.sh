#!/bin/bash 

for i in *.m4r; do
	mplayer -vo null -ao pcm:file="${i%m4r}wav" "$i"
	lame -h -b 192 "${i%m4r}wav"
done

