package daily;

import java.util.ArrayList;

public class NumSubarrayProductLessThanK {

    public int numSubarrayProductLessThanK(int[] nums, int k) {

        int n = nums.length, count = 0;

        int prod = 1, i = 0;

        for (int j = 0; j < n; j++) {

            prod *= nums[j];

            while (i <= j && prod >= k) {

                prod /= nums[i];

                i++;
            }

            count += j - i + 1;
        }

        return count;
    }


    public static void main(String[] args) {

        int[] nums = {10, 9, 10, 4, 3, 8, 3, 3, 6, 2, 10, 10, 9, 3};

        int k = 19;

        int result = (new NumSubarrayProductLessThanK()).numSubarrayProductLessThanK(nums, k);

        System.out.println(result);

    }
}
