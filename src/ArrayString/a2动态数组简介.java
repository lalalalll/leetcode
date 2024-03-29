package src.ArrayString;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;

public class a2动态数组简介 {

    // 正如我们在上一篇文章中提到的，数组具有固定的容量，
    // 我们需要在初始化时指定数组的大小。
    // 有时它会非常不方便并可能造成浪费。
    //
    // 因此，大多数编程语言都提供内置的动态数组，
    // 它仍然是一个随机存取的列表数据结构，但大小是可变的。
    // 例如，在 C++ 中的 vector，以及在 Java 中的 ArrayList。
    public static void main(String[] args) {



        // 1. initialize
        List<Integer> v0 = new ArrayList<>();
        List<Integer> v1;                           // v1 == null
        // 2. cast an array to a vector
        Integer[] a = {0, 1, 2, 3, 4};
        v1 = new ArrayList<>(Arrays.asList(a));
        // 3. make a copy
        List<Integer> v2 = v1;                      // another reference to v1
        List<Integer> v3 = new ArrayList<>(v1);     // make an actual copy of v1
        // 3. get length
        System.out.println("The size of v1 is: " + v1.size());;
        // 4. access element
        System.out.println("The first element in v1 is: " + v1.get(0));
        // 5. iterate the vector
        System.out.print("[Version 1] The contents of v1 are:");
        for (int i = 0; i < v1.size(); ++i) {
            System.out.print(" " + v1.get(i));
        }
        System.out.println();
        System.out.print("[Version 2] The contents of v1 are:");
        for (int item : v1) {
            System.out.print(" " + item);
        }
        System.out.println();
        // 6. modify element
        v2.set(0, 5);       // modify v2 will actually modify v1
        System.out.println("The first element in v1 is: " + v1.get(0));
        v3.set(0, -1);
        System.out.println("The first element in v1 is: " + v1.get(0));
        // 7. sort
        Collections.sort(v1);
        // 8. add new element at the end of the vector
        v1.add(-1);
        v1.add(1, 6);
        // 9. delete the last element
        v1.remove(v1.size() - 1);
    }
}
