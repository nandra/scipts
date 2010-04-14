#!/bin/bash
# Used for generating cscope and ctags files for
# better code browsing

DIR="$2"
KERNEL="$1"
C_DIR="$(pwd)"

if [ "$DIR" = "" ];then
    echo "Not correct path to project!!!"
    echo "Usage:"
    echo "gen_index.sh -k (-n) path_to_project"
    echo "-k for kernel"
    echo "-n for normal C project"
    echo ""
    echo "Quit"
else
    if [ "$DIR" = "." ];then
	DIR="$(pwd)"
	echo "dir=$DIR"
    fi
    cd $DIR
    echo "Generating cscope database"
    if [ "$KERNEL" = "-k" ];then
        #make cscope
	find $DIR -name '*.[ch]' > $DIR/cscope.files
	cscope -b -q
	echo "Generating ctags database"
	#make tags
	ctags -R
    elif [ "$KERNEL" = "-n" ];then
	find $DIR -name '*.[ch]' > $DIR/cscope.files
	cscope -b -q
	echo "Generating ctags database"
	ctags -R
    else
	echo "Please append correct option:"
	echo "-k for kernel"
	echo "-n for normal C project"
	exit 0;
    fi
#ctags -R
    cd $C_DIR
fi
